package application.services.student;

import domain.models.student.Student;
import domain.repository.student.IStudentRepository;
import infrastructure.persistence.student.StudentRepositoryImpl;
import domain.models.shared.enums.Gender;

public class StudentService {
    public void addStudent(String firstName, String lastName, int day, int month, int year, String adress, Gender gender, String studentCode, String classCode){
        Student s = new Student(studentCode, firstName, lastName, day, month, year, adress, gender, null);
        IStudentRepository repo = new StudentRepositoryImpl();

        // Add new element
        repo.addStudent(s);
    }
}
