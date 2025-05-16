#include "../Include/Student.h"
#include "../../ClassModule/Include/Class.h"


Student::Student(std::string name, int age, std::string address, Class* cclass)
: m_name(name), m_age(age), m_address(address), m_class(cclass) {
    cclass->addStudent(this);
}

Student::Student(std::string name, int age, std::string address)
: m_name(name), m_age(age), m_address(address), m_class(nullptr) {}

std::string Student::getName() const {
    return m_name;
}

int Student::getAge() const {
    return m_age;
}

std::string Student::getAddress() const {
    return m_address;
}

Class* Student::getClass() const {
    return m_class;
}

void Student::setName(std::string name) {
    m_name = name;
}

void Student::setAge(int age) {
    m_age = age;
}

void Student::setAddress(std::string address) {
    m_address = address;
}

void Student::setClass(Class* cclass) {
    m_class = cclass;
}

void Student::addToClass(Class* cclass) {
    cclass->addStudent(this);
}

void Student::display() const {
    std::cout << "Student: " << m_name << " (" << m_age << ")" << ", In Class: " << m_class->getName() << std::endl;
}