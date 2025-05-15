#include "../Include/Class.h"


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

void Class::display() const {
    std::cout << "Class: " << m_name << " (" << m_number << ")" << std::endl;
}