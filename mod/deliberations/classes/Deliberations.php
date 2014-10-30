<?php

class Deliberation extends ElggObject {
  
   /**
    * Set subtype to blog.
    */
    protected function initializeAttributes() {
      parent::initializeAttributes();
      $this->attributes['subtype'] = "deliberation";
    }
    
    /**
    * Can a user comment on this deliberation?
    *
    * @see ElggObject::canComment()
    *
    * @param int $user_guid User guid (default is logged in user)
    * @return bool
    * @since 1.8.0
    */
    public function canComment($user_guid = 0) {
      $result = parent::canComment($user_guid);
      if ($result == false) {
	      return $result;
      }

      if ($this->comments_on == 'Off') {
	      return false;
      }
      
      return true;
    }

    
}
   