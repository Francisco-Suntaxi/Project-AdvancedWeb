import mongoose from "mongoose";
const database= "medicinesdb";
async function Conection (username, password){
    const URL= "mongodb+srv://student:1234@cluster0.n0fcgad.mongodb.net/MEDICINE?retryWrites=true&w=majority";
    try{
        await mongoose.connect(URL, {useUnifiedTopology:true, useNewUrlParser:true, });
        console.log("Connected to MongoDBAtlas successfully");
    }catch(error){
        console.log("Error with connect to the MongoDBAtlas: " + error);
    };

}

export default Conection;

