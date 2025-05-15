#include "../Include/Class.h"
#include "../../StudentModule/Include/Student.h"



Class::Class(std::string name) : m_name(name), m_number(-1) {}

int Class::getNumber()  const {
    return m_number; 
}

std::string Class::getName() const {
    return m_name;
}

void Class::setName(std::string name) {
    m_name = name;
}

void Class::addStudent(Student* student) {
    m_students.push_back(student);
    student->setClass(this);
}

void Class::display() const {
    std::cout << "Class: " << m_name << " (" << m_number << ")" << std::endl;
    std::cout << "Students: " << std::endl;
    for (const auto& student : m_students) {
        std::cout << "\t";
        student->display();
    }
}