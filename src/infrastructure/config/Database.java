package infrastructure.config;
import java.sql.*;

public class Database {
    private Connection connection;
    private Statement statement;

    public Database(String databaseName){
        try{
            connection = DriverManager.getConnection("jdbc:sqlite:" + databaseName);
            statement = connection.createStatement();

            System.out.println("Connection to SQLite has been established.");
        }catch (SQLException e){
            System.out.println("Error: " + e.getMessage());
        }

    }

    public void executeQuery(String query){
        try{
            if(statement != null){
                statement.execute(query);
            } else {
                System.out.println("Statement is not initialized.");
            }
        }catch (SQLException e){
            System.out.println("SQL Execution error: " + e.getMessage());
        }
    }

    public void close(){
        try {
            if (statement != null) statement.close();
            if (connection != null) connection.close();
            System.out.println("Connection closed.");
        } catch (SQLException e) {
            System.out.println("Closing Error: " + e.getMessage());
        }
    }
}
