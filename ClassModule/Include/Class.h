#ifndef CLASS_H
#define CLASS_H

#include <string>
#include <iostream>
#include <vector>

#include "../../SharedModule/Interfaces/Displayable.h"

class Student;

class Class : public Displayable {
    int m_number;
    std::string m_name;
    std::vector<Student*> m_students;

    // This function used to get the depth to better display for the students in the class
    int getDepth(int attribute) const;

public:
    // Constructors
    Class() = default;
    Class(std::string name);

    // Destructor
    ~Class() = default;

    // Getters
    int getNumber() const;
    std::string getName() const;

    // Setters
    void setName(std::string name);

    // Add a student to the class
    void addStudent(Student* student);

    // Displayable interface
    void display() const override;
};


 
#endif
