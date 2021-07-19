## What is OOP?

> Object-Oriented is an approach to software development that models application around real world objects such as employees, cars, bank accounts, etc. A class defines the properties and methods of a real world object. As opposed to procedural programming where the focus is on writing procedures or functions that perform operations on the data, in object-oriented programming the focus is on the creations of objects which contain both data and functions together.

> A class acts as a template or blueprint from which lots of individual objects can be created. When individual objects are created, they inherit the same generic properties and behaviors, although each object may have different values for certain properties.

> For example, think of a class as a blueprint for a house. The blueprint itself is not a house, but is a detailed plan of the house. While, an object is like an actual house built according to that blueprint. We can build several identical houses from the same blueprint, but each house may have different paints, interiors and families inside, as shown in the illustration below.

![Class Illustration](./../../assets/class-object-relationship-illustration.png)

### Object-Oriented Concepts:
Before we go in detail, lets define important terms related to Object-Oriented Programming.
- [x] ```Class``` This is a programmer-defined data type, which includes local functions as well as local data. You can think of a class as a template for making many instances of the same kind (or class) of object.
- [x] ```Object``` An individual instance of the data structure defined by a class. You define a class once and then make many objects that belong to it. Objects are also known as instance.
- [x] ```Member Variable``` These are the variables defined inside a class. This data will be invisible to the outside of the class and can be accessed via member functions. These variables are called attribute of the object once an object is created.
- [x] ```Member function``` These are the function defined inside a class and are used to access object data.
- [x] ```Inheritance``` When a class is defined by inheriting existing function of a parent class then it is called inheritance. Here child class will inherit all or few member functions and variables of a parent class.
- [x] ```Parent class``` A class that is inherited from by another class. This is also called a base class or super class.
- [x] ```Child Class``` A class that inherits from another class. This is also called a subclass or derived class.
- [x] ```Polymorphism``` This is an object-oriented concept where same function can be used for different purposes. For example function name will remain same but it takes different number of arguments and can do different task.
- [x] ```Overloading``` a type of polymorphism in which some or all operators have different implementations depending on the types of their arguments. Similarly functions can also be overloaded with different implementation.
- [x] ```Data Abstraction``` Any representation of data in which the implementation details are hidden (abstracted).
- [x] ```Encapsulation``` refers to a concept where we encapsulate all the data and member functions together to form an object.
- [x] ```Constructor``` refers to a special type of function which will be called automatically whenever there is an object formation from a class.
- [x] ```Destructor``` refers to a special type of function which will be called automatically whenever an object is deleted or goes out of scope.

### Define a Class:
A class is defined by using the class keyword, followed by the name of the class, and a pair of curly braces ```{ }```. All its properties and methods go inside the braces.

Please see the basic example of [House](Basic/House.php) class...
