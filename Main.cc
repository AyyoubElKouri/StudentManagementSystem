#include "ClassModule/Include/Class.h"
#include "StudentModule/Include/Student.h"

int main() {
    Class myClass("MyClass");
    Student myStudent("John Doe", 20, "123 Main St");
    Student myStudent2("Ahmed", 21, "Mohammadia");
    
    myClass.addStudent(&myStudent);
    myClass.addStudent(&myStudent2);
    myClass.addStudent(new Student("Ali", 22, "Omar Ibn El Khattab"));
    myClass.addStudent(new Student("Mohamed", 23, "Youssef Ibn Touri"));
    myClass.addStudent(new Student("Ali Omar Student 33", 22, "Omar Ibn Eldd Khattab"));

    Student Ayyoub = Student("Ayyoub", 20, "hay pam");
    Ayyoub.addToClass(&myClass);

    myClass.display();
    

    return 0;
}