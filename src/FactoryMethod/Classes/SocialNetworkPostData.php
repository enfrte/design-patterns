<?php

namespace CodingInTheCold\DesignPatterns\FactoryMethod\Classes;

class SocialNetworkPostData 
{

    const FACEBOOK = 1;
    const LINKEDIN = 2;
    
    /**
     * The client code can work with any subclass of SocialNetworkPoster since it
     * doesn't depend on concrete classes.
     */
    function create(SocialNetworkPoster $creator)
    {
        if ( ! $this->getPostContent() ) {
            return; 
        }
        
        $creator->post($this->getPostContent());
    }


    /**
     * Get the value of social_media_selection
     */
    public function getSelection()
    {
        return !empty($_POST['social_media_selection']) ? $_POST['social_media_selection'] : false;
    }

    /**
     * Get the value of post_content
     */
    public function getPostContent()
    {
        return !empty($_POST['post']) ? $_POST['post'] : false;
    }


}