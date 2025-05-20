package interfaces.controllers.student;

import application.services.student.StudentService;
import domain.models.shared.enums.Gender;

public class StudentController {
    public void addStudent  (
                                String firstName,
                                String lastName,
                                int day,
                                int month,
                                int year,
                                String adress,
                                Gender gender,
                                String studentCode,
                                String classCode
                            ) {
        new StudentService().addStudent(firstName, lastName, day, month, year, adress, gender, studentCode, classCode);
    }
}

