# Questions:


1. What is the complexity of your algorithm?

Algorithm with methods that sometimes manipulate different classes at the same time( good advantage to use POO. Easy to use again different objects). The complexity is on the positions handling too. It demands quite a few steps to place one vessel randomly on a certain position who is itself on the grid.
I also discovered and learn to use Doctrine/Collections to work more easily on arrays. It set a bunch of usefull Collection methods to manipulate arrays(add, contains, count...)



1. How would you improve your algorithm?

First by finishing the vessel pairs logic, and also make a test for each algorithm done.
Regarding the data structure, I would like to improve how I handle order. The vessels should not 'have' orders (as I did) but they should 'receive' orders. 
Set and code the logic of attacks and defenses for each vessel.



2. How would your adapt your algorithm to three dimensions? How would that affect
   the complexity?

Currently, there is a grid of 100x100 boxes, so 1000 possible positions.
If we add on z axis for example (100x100x100), there is one milion possibilities of position !
I imagine that we should work on the server charge due to the search of position for each vessel on the grid.