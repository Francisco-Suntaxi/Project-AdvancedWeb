import mongoose from "mongoose";
const database= "medicinesdb";
async function Conection (username, password){
    const URL= "mongodb+srv://AndresValarezo:admin@cluster0.yxwn5.mongodb.net/medicinesdb?retryWrites=true&w=majority";
    try{
        await mongoose.connect(URL, {useUnifiedTopology:true, useNewUrlParser:true, });
        console.log("Connected to MongoDBAtlas successfully");
    }catch(error){
        console.log("Error with connect to the MongoDBAtlas: " + error);
    };

}

export default Conection;

