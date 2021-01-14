# Postponement of my choices and actions during the exercise:

## Day 1:

- I started by creating a new repository on GitHub for my project, on the "develop" branch.

- I then analyzed the instructions and schematized on paper an object structure that reflects the fleet of vessels. Seeing a pictorial presentation of my structure helped me identify which attributes can be reused and thus define future classes of Models and inheritances. The goal is not to repeat itself and to be able to add a vessel with minimal effort.

- In solution 1 started, I created two models OffensiveCraft and SupportCraft which extend from the Vessel class. Each of these classes has properties related to each kind of craft. In the index.php folder, I am developing the possibility of creating a new type of vessel by instantiating the corresponding craft and filling in the requested parameters. Finally, I implement a gridController to create a layout (100x100) of the game grid.

Not being finally satisfied with this approach which is not completely object oriented, I preferred to recreate a new model class structure to better represent my data schema.

- For the new solution, I wanted to better separate the different structural elements into distinct classes and insist on the notion of inheritance, to avoid repeating my values. In this new structure, I can add a new type of ship with little effort, creating the corresponding class and hearing from the corresponding category of ships (Support or Offensive).

- Learning on CI/CD concept, create unit tests and setup CI/CD on GitHub Actions


## Day 2

- I started by educating myself a bit more about unit testing to create my first tests with phpUnit. First test of the application created to check that the total number of vessels does not exceed the maximum indicated.

- I also worked on the data structure by adding a role and the possibility of creating a new character on the commandShip
- Main purpose of today is to create algorithm for grid and the pairs vessels strategy.
