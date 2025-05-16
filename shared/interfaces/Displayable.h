#pragma once

/**
 * @brief Interface for displayable entities.
 * 
 * Any class that inherits from Displayable must implement the display() method,
 * which is used to output the object representation (typically to std::cout).
 */
class Displayable {
public:
    /**
     * @brief Display the contents of the class.
     */
    virtual void display() const = 0;

    /**
     * @brief Virtual destructor to allow safe deletion via base pointer.
     */
    virtual ~Displayable() = default;
};