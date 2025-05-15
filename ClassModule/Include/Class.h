#ifndef CLASS_H
#define CLASS_H

#include <string>
#include <iostream>
#include "../../SharedModule/Interfaces/Displayable.h"

class Class : public Displayable {
    int m_number;
    std::string m_name;

public:
    // Constructors
    Class() = default;
    Class(const Class& other) = default;
    Class(std::string name);

    // Destructor
    ~Class() = default;

    // Getters
    int getNumber() const;
    std::string getName() const;

    // Setters
    void setName(std::string name);

    // Displayable interface
    void display() const override;
};


 
#endif
