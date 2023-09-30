<?php

namespace CodingInTheCold\DesignPatterns\FactoryMethod\Classes;

class SocialNetworkFormProcessor 
{

    const FACEBOOK = 1;
    const LINKEDIN = 2;
    
    public function __construct() 
    {
        if ( $this->getSelection() == SocialNetworkFormProcessor::FACEBOOK ) {
            /**
             * During the initialization phase, the app can decide which social network it
             * wants to work with, create an object of the proper subclass, and pass it to
             * the client code.
             */
            $this->create(new FacebookPoster("john_smith", "abc123"));
        }
        else if ( $this->getSelection() == SocialNetworkFormProcessor::LINKEDIN ) {
            $this->create(new LinkedInPoster("john_smith@example.com", "def456"));
        }
    }

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
        return $_POST['social_media_selection'] ?? false;
    }
    
    /**
     * Get the value of post_content
     */
    public function getPostContent()
    {
        return $_POST['post'] ?? false;
    }


}