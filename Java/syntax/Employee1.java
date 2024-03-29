public class Employee1 {
    
        private String name;
        private String role;
        private double salary;
      
        public Employee1(String name, String role, double salary) {
          this.name = name;
          this.role = role;
          this.salary = salary;
        }
      
       
        public String lines() {
          return "Employee{" +
              "name='" + name + '\'' +
              ", role='" + role + '\'' +
              ", salary=" + salary +
              '}';
        }
      }

