<?php
App::uses('AppController', 'Controller');

// Import images controller for uploading of card images
App::import('Controller', 'Images');

/**
 * CardVariations Controller
 *
 * @property CardVariation $CardVariation
 */
class CardVariationsController extends AppController 
{

    public $uses = array('CardVariation', 'Image');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CardVariation->recursive = 0;
		$this->set('cardVariations', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CardVariation->id = $id;
		if (!$this->CardVariation->exists()) {
			throw new NotFoundException(__('Invalid card variation'));
		}
		$this->set('cardVariation', $this->CardVariation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add( $card_id = null ) 
        {
		$variations = $this->CardVariation->Variation->find('list');
		$cards = $this->CardVariation->Card->find('list');
		$this->set(compact('variations', 'cards'));
                
		if ($this->request->is('post')) 
                {
                    // Validate Images
                    $front_img = $this->request->data[ 'CardVariationImage' ][ 'card_front_side' ];
                    $rear_img = $this->request->data[ 'CardVariationImage' ][ 'card_back_side' ];
                    if ( !$this->validateImage( $front_img ) || !$this->validateImage( $rear_img ) )
                    { 
                        $this->Session->setFlash(__('Please provide image for the Front and Rear side of the Card.'), 'default', array( 'class' => 'alert alert-error' ));
                    }
                    else
                    {
                        // Create name
                        $variationName = $cards[ $this->request->data[ 'CardVariation' ][ 'card_id' ] ]
                                            . ' (' . $variations[ $this->request->data[ 'CardVariation' ][ 'variation_id' ] ] . ')';
                        // Assign name
                        $this->request->data[ 'CardVariation' ][ 'name' ] = $variationName;

                        $dataSource = $this->CardVariation->getDataSource();

                        // Begin CardVariation Transaction
                        $dataSource->begin();

                        // Create new variation and save
                        $this->CardVariation->create();
                        if ($this->CardVariation->save($this->request->data)) 
                        {
                            // Success

                            // Import ImagesController to upload images
                            $cardImages = new ImagesController();
                            $cardImages->constructClasses();                

                            // Remove bracket and parenthesis
                            $filename = str_replace( array( '(', ')', '[', ']' ), '', $variationName );
                            $filename = str_replace( array( ' ', '-' ), '_', $filename );

                            debug( $this->request->data );

                            $params = array('front_img' => $this->request->data['CardVariationImage']['card_front_side'],
                                            'rear_img' => $this->request->data['CardVariationImage']['card_back_side'],
                                            'card_orientation' => $this->request->data['CardVariationImage']['card_orientation'],
                                            'filename' => $filename, 
                                            'image_group_type' => 'card_variations', 
                                            'image_group_id' => $this->CardVariation->id);

                            if(($res = $cardImages->upload_images($params)) !== FALSE) {       
                                // Build the Card Variation Image data
                                $this->request->data[ 'CardVariationImage' ][ 'card_variation_id' ] = $this->CardVariation->id;
                                $this->request->data[ 'CardVariationImage' ][ 'rear_img_id' ] = $res['rear_img_id'];
                                $this->request->data[ 'CardVariationImage' ][ 'front_img_id' ] = $res['front_img_id'];;

                                // Save Card Variation Images
                                if ( $this->CardVariation->CardVariationImage->save( $this->request->data ) )
                                {
                                    $dataSource->commit();
                                    
                                    // New Card is Base Card
                                    if ( $this->request->data[ 'CardVariation' ][ 'is_base' ] )
                                    {
                                        // Reset all, except for the new variation
                                        $this->CardVariation->updateAll( array( 'CardVariation.is_base' => 0 ),
                                                                         array( 'CardVariation.card_id =' => $this->request->data[ 'CardVariation' ][ 'card_id' ],
                                                                                'CardVariation.card_variation_id <>' => $this->CardVariation->id ));
                                    }
                                    
                                    $this->Session->setFlash(__('The card variation has been saved'), 'default', array( 'class' => 'alert alert-success' ));
                                    $card_id = $this->request->data[ 'CardVariation' ][ 'card_id' ];
                                }
                                else
                                {
                                    $dataSource->rollback();
                                    $this->Session->setFlash(__('There is an error uploading card images. Please, try again.'), 'default', array( 'class' => 'alert alert-error' ));
                                }
                            }                        
                        } 
                        else 
                        {
                            // Error
                            $this->Session->setFlash(__('The card variation could not be saved. Please, try again.'), 'default', array( 'class' => 'alert alert-error' ));
                        }
                    }
		} 
                
                if ( $card_id )
                {
                    $card = $this->CardVariation->Card->findByCardId( $card_id );
                    unset( $card[ 'Card' ] );
                    $card[ 'Card' ][ 'card_id' ] = $card_id;
                    $this->set( 'data', $card );
                }
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
            $this->CardVariation->id = $id;
            if (!$this->CardVariation->exists()) {
                    throw new NotFoundException(__('Invalid card variation'));
            }
            if ($this->request->is('post') || $this->request->is('put')) {
                    if ($this->CardVariation->save($this->request->data)) {
                            $this->Session->setFlash(__('The card variation has been saved'));
                            $this->redirect(array('action' => 'index'));
                    } else {
                            $this->Session->setFlash(__('The card variation could not be saved. Please, try again.'));
                    }
            } else {
                    $this->request->data = $this->CardVariation->read(null, $id);
            }
            $variations = $this->CardVariation->Variation->find('list');
            $cards = $this->CardVariation->Card->find('list');
            $this->set(compact('variations', 'cards'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {

            $this->CardVariation->id = $id;
            if (!$this->CardVariation->exists()) {
                    throw new NotFoundException(__('Invalid card variation'));
            }
            
            $data = $this->CardVariation->read( null, $id );
            
            if ($this->CardVariation->delete()) {
                    $this->Session->setFlash(__('Card variation deleted.'), 'default', array( 'class' => 'alert alert-success' ));
                    $this->redirect(array('action' => 'add', $data[ 'Card' ][ 'card_id' ], '#' => 'btn_delete_' . $id ) );
            }
            $this->Session->setFlash(__('Card variation was not deleted.'), 'default', array( 'class' => 'alert alert-error' ));
            $this->redirect(array('action' => 'add', $data[ 'Card' ][ 'card_id' ], '#' => 'btn_delete_' . $id ) );
	}

        
        public function set_as_base( $id )
        {
            $this->CardVariation->id = $id;
            if (!$this->CardVariation->exists()) {
                    throw new NotFoundException(__('Invalid card variation'));
            }    
            
            $data = $this->CardVariation->read( null, $id );
            
            if ( $this->setAsBase( $id ) )
            {
                $this->Session->setFlash(__('A new Base Card is set.'), 'default', array( 'class' => 'alert alert-success' ));
            }
            else
            {
                $this->Session->setFlash(__('Base Card is not set. Please, try again.'), 'default', array( 'class' => 'alert alert-error' ));
            }
            
            $this->redirect( array( 'action' => 'add', $data[ 'Card' ][ 'card_id' ], '#' => 'btn_set_as_base_' . $id ) );
        }
        
        
        // Helpers
        
        public function setAsBase( $id = null )
        {
		$this->CardVariation->id = $id;
		if (!$this->CardVariation->exists()) {
			throw new NotFoundException(__('Invalid card variation'));
                        return false;
		}
                
                $data = $this->CardVariation->read( null, $id );
                
                // Temporarily unbind model
                $this->CardVariation->unbindModel( array( 'belongsTo' => array( 'Card', 'Variation' ) ) );
                
                // Begin transaction
                $this->CardVariation->getDataSource()->begin();
                
                // Reset all variation of card
                if ( $this->CardVariation->updateAll( array( 'CardVariation.is_base' => 0 ),
                                                       array( 'CardVariation.card_id =' => $data[ 'Card' ][ 'card_id' ] ) ) )
                {
                    if ( $this->CardVariation->save( array( 'card_variation_id' => $data[ 'CardVariation' ][ 'card_variation_id' ], 
                                                            'is_base' => 1 ) ) )
                    {
                        // End transaction
                        $this->CardVariation->getDataSource()->commit();
                        return true;
                    }
                }
                
                // Rollback transaction
                $this->CardVariation->getDataSource()->rollback();
                
                return false;
        }
        
        public function validateImage( array $image )
        {
            $result = array( 'status' => true, 
                             'code' => -1,
                             'message' => 'Image OK!' );

            // TODO: Be verbose about file upload errors
            if ( $image[ 'error' ] )
            {
                $result = array( 'status' => false, 
                                 'code' => UPLOAD_ERR_INI_SIZE,
                                 'message' => 'There is an error in file.' );
            }
            
            return $result[ 'status' ];
        }
}
