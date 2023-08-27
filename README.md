# Design patterns

Some examples of design patterns

## Factory method

Cody says...

* The SocialNetworkPostData class is using the factory method pattern to abstract away the concrete social network poster classes (FacebookPoster and LinkedInPoster). This allows the client code to work with any social network poster without being coupled to a specific implementation.

* The factory method (create()) is defined in the SocialNetworkPostData class. This class acts as the creator and determines which concrete product to instantiate based on the user selection.

* The client code in index.php uses the factory method to obtain an instance of the appropriate concrete product (FacebookPoster or LinkedInPoster) based on user input.

* The client code does not depend on the concrete classes directly. The factory method abstracts away the object creation logic.

* There is loose coupling between the creator and the concrete products. The concrete products only need to implement the common SocialNetworkPoster interface.

* The code follows the single responsibility principle - the creator class is responsible for object creation, and the concrete products are responsible for posting.

So in summary, the use of the factory method pattern here adheres to SOLID principles and reduces coupling. 
