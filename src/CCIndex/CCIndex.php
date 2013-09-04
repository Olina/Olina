<?php
/**
 * Standard controller layout.
 * 
 * @package OlinaCore
 */
class CCIndex implements IController {

  /**
    * Implementing interface IController. All controllers must have an index action.
   */
  public function Index() {  
    global $olina;
    $olina->data['title'] = "The Index Controller";
    $olina->data['main'] = "<h1>The Index Controller</h1>";
  }

}  
