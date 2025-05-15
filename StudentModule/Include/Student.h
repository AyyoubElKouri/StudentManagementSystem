#pragma once

#include <string>
#include <iostream>
#include "../../SharedModule/Interfaces/Displayable.h"

class Class;

class Student : public Displayable {
    int m_id;
    std::string m_name;
    int m_age;
    std::string m_address;
    Class* m_class;

public:
    Student(std::string name, int age, std::string address, Class* cclass);
    Student(std::string name, int age, std::string address);
    ~Student() = default;

    // Getters
    std::string getName() const;
    int getAge() const;
    std::string getAddress() const;
    Class* getClass() const;

    // Setters
    void setName(std::string name);
    void setAge(int age);
    void setAddress(std::string address);
    void setClass(Class* cclass);


    void display() const override;
};
