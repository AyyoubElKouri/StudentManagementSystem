package domain.models.shared;

import domain.models.shared.enums.Gender;

public class PersonFeatures {
    private String firstName;
    private String lastName;
    private Date BirthDate;
    private String adress;
    private Gender gender;

    public PersonFeatures(String firstName, String lastName, Date BirthDate, String adress, Gender gender){
        this.firstName = firstName;
        this.lastName = lastName;
        this.BirthDate = BirthDate;
        this.adress = adress;
        this.gender = gender;
    }

    public PersonFeatures(String firstName, String lastName, int day, int month, int year, String adress, Gender gender){
        this.firstName = firstName;
        this.lastName = lastName;
        this.BirthDate = new Date(day, month, year);
        this.adress = adress;
        this.gender = gender;
    }


    public String getFirstName() {
        return firstName;
    }

    public void setFirstName(String firstName) {
        this.firstName = firstName;
    }

    public String getLastName() {
        return lastName;
    }

    public String getAdress() {
        return adress;
    }

    public Gender getGender() {
        return gender;
    }

    public void setLastName(String lastName) {
        this.lastName = lastName;
    }

    public Date getBirthDate() {
        return BirthDate;
    }

    public void setBirthDate(Date birthDate) {
        BirthDate = birthDate;
    }

    public void setAdress(String adress) {
        this.adress = adress;
    }

    public void setGender(Gender gender) {
        this.gender = gender;
    }

    @Override
    public String toString(){
        return "PersonFeatures{" +
                "firstName='" + firstName + '\'' +
                ", lastName='" + lastName + '\'' +
                ", BirthDate=" + BirthDate +
                ", adress='" + adress + '\'' +
                ", gender=" + gender +
                '}';
    }
}
