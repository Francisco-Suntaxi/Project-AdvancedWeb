import mongoose from "mongoose";

const medicineSchema =mongoose.Schema({
    id: Number,
    name: String,
    description: String,
    category: String,
    quantity: Number,
    price: String,
    elabDate: String,
    expDate: String,
});

const collection= "medicines";
const Medicine =mongoose.model(collection, medicineSchema);

export default Medicine;