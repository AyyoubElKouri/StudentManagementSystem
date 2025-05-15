#include "../Include/Class.h"
#include "../../StudentModule/Include/Student.h"

int Class::getDepth(int attribute) const {
    int maxDepth = 1;
    switch (attribute) {
        case 0:
            for (const auto& student : m_students) {
                int depth = student->getName().length();
                if (depth > maxDepth) {
                    maxDepth = depth;
                }
            }
            break;
        case 1:
            for (const auto& student : m_students) {
                int depth = student->getAge();
                if (depth > maxDepth) {
                    maxDepth = depth;
                }
            }
            break;
        case 2:
            for (const auto& student : m_students) {
                int depth = student->getAddress().length();
                if (depth > maxDepth) {
                    maxDepth = depth;
                }
            }
            break;
        case 3:
            for (const auto& student : m_students) {
                int depth = student->getClass()->getName().length();
                if (depth > maxDepth) {
                    maxDepth = depth;
                }
            }
            break;
        default:
            break;
    }

    return maxDepth;
}

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
    int depth = getDepth(0) + getDepth(1) + getDepth(2) + getDepth(3) + 5;
    for (int i = 0; i < depth; i++) {
        std::cout << "-";
    }
    std::cout << std::endl;

    std::cout << "Class: " << m_name << " (" << m_number << ")" << std::endl;
    std::cout << "Students: " << std::endl;
    for (const auto& student : m_students) {
        std::cout << "\t";
        std::cout << student->getName();
        for (int i = 0; i < getDepth(0) - student->getName().length() + 1; i++) {
            std::cout << " ";
        }
        std::cout << "(" << student->getAge() << "), ";
        std::cout << student->getAddress();
        for (int i = 0; i < getDepth(2) - student->getAddress().length() + 1; i++) {
            std::cout << " ";
        }
        std::cout << ", " << (student->getClass() ? "In Class: " + student->getClass()->getName() : "No Class") << std::endl;
    }

    for (int i = 0; i < depth; i++) {
        std::cout << "-";
    }
    std::cout << std::endl;
}