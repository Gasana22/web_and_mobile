function BodaBodaRider (name, location, bodaType) {

        this.name = name;
        this.location = location;
        this.bodaType = bodaType;


        this.Income=function(distanceTraveled, farePerKilometer) {
            return distanceTraveled * farePerKilometer;
        };
    
    
    }
    const rider = new  BodaBodaRider("Gasana Mark", "Kampala", "Standard");

     let distanceTraveled = 20; 
    let farePerKilometer = 500; 
    
    const Income = rider.Income(distanceTraveled, farePerKilometer);
    console.log(`Income for ${rider.name}: ${Income}`);

   