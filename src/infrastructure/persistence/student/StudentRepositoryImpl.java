package infrastructure.persistence.student;

import infrastructure.config.Database;
import domain.models.student.Student;
import domain.repository.student.IStudentRepository;
import domain.models.shared.PersonFeatures;

public class StudentRepositoryImpl implements IStudentRepository {
    public void addStudent(Student student){
        Database db = new Database("students.db");
        db.executeQuery("CREATE TABLE IF NOT EXISTS students (studentCode TEXT PRIMARY KEY, firstName TEXT, lastName TEXT, day INTEGER, month INTEGER, year INTEGER, adress TEXT, gender TEXT);");

        PersonFeatures p = student.getPersonFeatures();

        db.executeQuery("INSERT INTO students(studentCode, firstName, lastName, day, month, year, adress, gender) values (\"" + student.getStudentCode() + "\",\"" + p.getFirstName() + "\",\"" + p.getLastName() + "\"," + p.getBirthDate().getDay() + "," + p.getBirthDate().getMonth() + "," + p.getBirthDate().getYear() + ",\"" + p.getAdress() + "\",\"" + p.getGender() + "\")" );
    }
}
