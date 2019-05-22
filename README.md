Chapter 1

Number of Various Files and
Directories by Categorising

1.1 Problem Statement

Write a function that lists the number of ordinary files, directories, block special files, charac-
ter special files, FIFOs, and symbolic links in the working directory. Do this in two different

ways:
a. Use the first letter of the output of ls l to determine a files type.
b. Use the file type condition tests of the [[ expression ]] syntax to determine a files type.
1.2 Theory Related to Problem
The problem statement says to print the number of directories, ordinary files, block special
files ,FIFOs. Using function ft.
About Shell Scripting:
As shell can also take commands as input from file we can write these commands in a file and
can execute them in shell to avoid this repetitive work. These files are called Shell Scripts
or Shell Programs. Shell scripts are similar to the batch file in MS-DOS. Each shell script is
saved with .sh file extension eg. myscript.sh
1.3 Implementation
The task is implemented using shell scripting. A function ft is called. The entire file is
traversed using ’*’ in a for loop. If a particular type of file is found then the corresponding
count variable is incremented. Finally the result is printed using echo. This is done using 2
methods.

1

CHAPTER 1. NUMBER OF VARIOUS FILES AND DIRECTORIES BY CATEGORISING2
1.4 Script A

Figure 1.1: A Shell script for generating number of directories and files present
by category.

CHAPTER 1. NUMBER OF VARIOUS FILES AND DIRECTORIES BY CATEGORISING3
1.4.1 Output

Figure 1.2: Output of problem 1a

CHAPTER 1. NUMBER OF VARIOUS FILES AND DIRECTORIES BY CATEGORISING4
1.5 Script B

Figure 1.3: A Shell script for generating number of directories and files present
by category.

CHAPTER 1. NUMBER OF VARIOUS FILES AND DIRECTORIES BY CATEGORISING5
1.5.1 Output

Figure 1.4: Output of problem 1b

1.6 Executable code
GitHub Link: Code A
https://github.com/Akhila-Krishna/FOSS-Lab-Exam/blob/master/Question1a.sh.
GitHub Link: Code B
https://github.com/Akhila-Krishna/FOSS-Lab-Exam/blob/master/Question1b.sh.

Chapter 2

Capitalising Last Word of Each
Line

2.1 Problem Statement
Write an awk script named net list that reads from the rfc-retrieval.txt file and displays a
the last word on each line in all uppercase letters.
2.2 Theory Related to Problem
The problem requirement is to capitalise last word of each line.
About awk is a scripting language used for manipulating data and generating reports.The awk
command programming language requires no compiling, and allows the user to use variables,
numeric functions, string functions, and logical operators.
2.3 Implementation
The requirement is satisfied using the predefined variable NF.The file to be changed is passed
as an argument. It gives the number of fields in the current record. awk automatically
updates the value of NF each time it reads a record. No matter how many fields there are,
the last field in a record can be represented by $NF. toupper() capitalises a given word. After
capitalising output is printed using print $0 command.

6

CHAPTER 2. CAPITALISING LAST WORD OF EACH LINE 7
2.4 Script

Figure 2.1: Awk script for capitalising lst word of each line.

2.4.1 Output

Figure 2.2: Output of problem 2

2.5 Executable code
GitHub Link:
https://github.com/Akhila-Krishna/FOSS-Lab-Exam/blob/master/Question2.awk. GitHub

CHAPTER 2. CAPITALISING LAST WORD OF EACH LINE 8
Link:TestCase File
https://github.com/Akhila-Krishna/FOSS-Lab-Exam/blob/master/rfc-retrieval.txt.

Chapter 3

Multiple-Choice Quiz Program

3.1 Problem Statement
Implement a generic multiple-choice quiz program using PHP. The program should get its
questions from data files, present them to the user, and keep track of the number of correct
and incorrect answers. The user must be able to exit from the program at any time and
receive a summary of results to that point.
3.2 Detailed Description and Design Procedure of Problem
The detailed design of this program and the detailed description of the problem depend on a
number of choices:
How will the program know which subjects are available for quizzes?
How will the user choose a subject?
How will the program know when the quiz is over?
Should the program present the same questions (for a given subject) in the same order each
time, or should it scramble them? Of course, you can make many perfectly good choices that
implement the specification of the problem. The following details would narrow down the
problem specification:
Each subject will correspond to a subdirectory of a master quiz directory. This directory will
be named in the environment variable QUIZDIR, whose default will be /quiz. For example,
you could have the following directories correspond to the subjects engineering, art, and
politics: /quiz/engineering, /quiz/art, and /quiz/politics. Put
3.3 Theory Related to Problem
A Quiz program is to be implemented using PHP. The program requires a database to keep
track of the activities of contestants.
About PHP

PHP is a recursive acronym for ”PHP: Hypertext Preprocessor”. PHP is a server side script-
ing language that is embedded in HTML. It is used to manage dynamic content, databases,

session tracking, even build entire e-commerce sites

9

CHAPTER 3. MULTIPLE-CHOICE QUIZ PROGRAM 10
3.4 Implementation
The program get its questions from data files, present them to the user, and keep track of
the number of correct and incorrect answers. The user is able to exit from the program at
any time and receive a summary of results to that point.

CHAPTER 3. MULTIPLE-CHOICE QUIZ PROGRAM 11
3.5 Script

Figure 3.1: PHP Code for Quiz Programme.

3.5.1 Output

CHAPTER 3. MULTIPLE-CHOICE QUIZ PROGRAM 12

Figure 3.2: Front page of Quiz

Figure 3.3: Playing Quiz-selecting only one choice at a time

Figure 3.4: Successfully completed the quiz

CHAPTER 3. MULTIPLE-CHOICE QUIZ PROGRAM 13

Figure 3.5: Total marks after submission

3.6 Executable code
GitHub Link:
https://github.com/Akhila-Krishna/FOSS-Lab-Exam/blob/master/Question3.php.
