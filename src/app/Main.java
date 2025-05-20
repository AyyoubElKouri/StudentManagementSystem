package app;

import interfaces.controllers.student.StudentController;
import domain.models.shared.enums.Gender;

import java.util.UUID;

/**
 * app.Main class demonstrating SQLite database operations including:
 * - Database connection
 * - Table creation
 * - Data insertion
 * - Data querying
 */
public class Main {
    public static void main(String[] args) {
        StudentController s = new StudentController();
        s.addStudent("John", "Doe", 1, 1, 1990, "Street 1", Gender.MALE, UUID.randomUUID().toString(), "ZE");

    }
}

