package domain.models.student;

import domain.models.shared.PersonFeatures;
import domain.models.shared.enums.Gender;
import domain.models.classroom.Classroom;

public class Student {
    private String studentCode;
    private PersonFeatures personFeatures;
    private Classroom classroom;

    public Student(String studentCode, PersonFeatures personFeatures, Classroom classroom){
        this.studentCode = studentCode;
        this.personFeatures = personFeatures;
        this.classroom = classroom;
    }

    public Student(String studentCode, String firstName, String lastName, int day, int month, int year, String adress, Gender gender, Classroom classroom){
        this.studentCode = studentCode;
        this.personFeatures = new PersonFeatures(firstName, lastName, day, month, year, adress, gender);
        this.classroom = classroom;
    }

    public String getStudentCode() {
        return studentCode;
    }

    public void setStudentCode(String studentCode) {
        this.studentCode = studentCode;
    }

    public PersonFeatures getPersonFeatures() {
        return personFeatures;
    }

    public void setPersonFeatures(PersonFeatures personFeatures) {
        this.personFeatures = personFeatures;
    }

    public Classroom getClassroom() {
        return classroom;
    }

    public void setClassroom(Classroom classroom) {
        this.classroom = classroom;
    }

    public void addToClass(Classroom classroom){
        this.setClassroom(classroom);
        classroom.addStudent(this);
    }

    @Override
    public String toString() {
        return "Student{" +
                "studentCode='" + studentCode + '\'' +
                ", personFeatures=\n" + personFeatures.toString() +
                "\n, classroom=" + classroom +
                '}';
    }
}
