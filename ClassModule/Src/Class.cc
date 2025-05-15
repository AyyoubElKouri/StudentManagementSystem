#include "../Include/Class.h"


Class::Class(std::string name) : m_name(name) {}

int Class::getNumber()  const {
    return m_number; 
}

std::string Class::getName() const {
    return m_name;
}

void Class::setName(std::string name) {
    m_name = name;
}