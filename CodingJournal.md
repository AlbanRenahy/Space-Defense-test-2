# Postponement of my choices and actions during the exercise:

## Day 1:

- I started by creating a new repository on GitHub for my project, on the "develop" branch.

- I then analyzed the instructions and schematized on paper an object structure that reflects the fleet of vessels. Seeing a pictorial presentation of my structure helped me identify which attributes can be reused and thus define future classes of Models and inheritances. The goal is not to repeat itself and to be able to add a vessel with minimal effort.

- In solution 1 started, I created two models OffensiveCraft and SupportCraft which extend from the Vessel class. Each of these classes has properties related to each kind of craft. In the index.php folder, I am developing the possibility of creating a new type of vessel by instantiating the corresponding craft and filling in the requested parameters. Finally, I implement a gridController to create a layout (100x100) of the game grid.

Not being finally satisfied with this approach which is not completely object oriented, I preferred to recreate a new model class structure to better represent my data schema.

- For the new solution, I wanted to better separate the different structural elements into distinct classes and insist on the notion of inheritance, to avoid repeating my values. In this new structure, I can add a new type of ship with little effort, creating the corresponding class and hearing from the corresponding category of ships (Support or Offensive).

- Learning on CI/CD concept, create unit tests and setup CI/CD on GitHub Actions


## Day 2

- Educating myself a bit more about unit testing to create my first tests with phpUnit. First test of the application created to check that the total number of vessels does not exceed the maximum indicated.

- Working on the data structure by adding a role and the possibility of creating a new character on the commandShip

- Implement the grid and vessels position algorithm. First with steps in comments and then by coding. Still a difficult part for me to modeling every coding steps to arrive on the wanted goal. 
I took time to think about the steps I need to pass to create the algorithm, and then translate on the code.


## Day 3 

- Set an algorithm to test the random placement of Vessels on the grid.
  
- I also started to implement the logic to create pairs and to place them on the grid.

- Tech learning CI/CD implements + some tets with it.
  
- Reading again the code done, write more comments to explain and answer the final questions.
