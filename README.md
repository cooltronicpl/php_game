# php_game
A string that contains only characters is given:

'(', ')', '*'

Example:

"(((\*)) (((((\*))) (\*))))"
 
Let the length of the string be N.

It describes a 1-dimensional world in which you can move left and right.
 
'(' stands for stairs deep into the cave (level - 1)

')' means stairs up (level +1)

The '*' means treasure

A treasure hunter travels around the world. Its position is determined by the index in the string representing the world.

The initial level is 0, the initial index is -1 or N, at the discretion of the solving task.
If you move to the '(' or ')' sign, you must take the stairs. Moving to '\*' does not change the level.
Setting on an index outside of (0, N) has no effect.
 
Implement a function that will help a treasure hunter moving according to the rules given above
find the smallest index belonging to the set (0, N) such that:
it contains a treasure and at the level corresponding to this index it has the most treasures in the collection.

 
The argument is the string described in the task, and the return value is the index to be searched.

----------------
Example:
+ ================================================= ================================================== ================================================== ========================== +
index: | 0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 | 16 | 17 | 18 | 19 | 20 | 21 |
string:| ( | ( | ( | \* | ) |)  | ( | ( | ( | ( | ( | \* | ) | ) | ) | \*  | (  | \*  |)   |  ) | )  | )  |
level: | -1 | -2 | -3 | -3 | -2 | -1 | -2 | -3 | -4 | -5 | -6 | -6 | -5 | -4 | -3 | -3 | -4 | -4 | -3 | -2 | -1 | 0 |
+ ================================================= ================================================== ================================================== ========================== +

In the above case, the index searched is '3';