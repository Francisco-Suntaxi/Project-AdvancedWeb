import User from '../userSchema/userSchema.js';
import Medicine from '../userSchema/medicineSchema.js';


export const addMedicine = async (request, response) => {
    const medicine = request.body;
    const newMedicine= new Medicine(medicine);
    
    try{
        await newMedicine.save();
        response.status(201).json(newMedicine);
    }catch(error){
        response.status(409).json({message: error.message});
    }

};

export const addMedicineLot = async (request, response) => {
    const medicine = request.body;
    medicine.description= medicine.description +" Lote Nuevo";
    const newMedicine= new Medicine(medicine);
    
    try{
        await newMedicine.save();
        response.status(201).json(newMedicine);
    }catch(error){
        response.status(409).json({message: error.message});
    }

};
export const addMedicineIncomplete = async (request, response) => {
    const medicine = request.body;
    const medicines= await Medicine.find({});
    var idAux=0;
    console.log(medicine);
    
    for(let i=0; i<medicines.length-1; i++)
    {
        const i1=i+1;
        if(medicines[i].id >=medicines[i1].id)
        {
            idAux= medicines[i].id;
        }

    }

    if(medicine.id === '')
    {
        medicine.id = idAux+1;
    }
    if(medicine.name == ''){
        medicine.name = "Nombre Vacio";
    }
    if(medicine.description === ""){
        medicine.description = "Descripción vacia";
    }
    if(medicine.category === ""){
        medicine.category = "Categoria vacia";
    }
    if(medicine.quantity === ''){
        medicine.quantity = 0;
    }
    if(medicine.price === ""){
        medicine.price = "Precio vacio";
    }
    if(medicine.elabDate === ""){
        medicine.elabDate = "Fecha de elaboracion vacia";
    }
    if(medicine.expDate === ""){
        medicine.expDate = "Fecha de expiracion vacia";
    }

    const newMedicine= new Medicine(medicine);
    
    try{
        await newMedicine.save();
        response.status(201).json(newMedicine);
    }catch(error){
        response.status(409).json({message: error.message});
    }

};

export const getAllUsers = async (request, response) => {
    try {
        
        const users = await User.find({});
        response.status(200).json(users);
    } catch (error) {
        response.status(404).json({message: error.message});
    }

};

export const getUser = async (request, response) => {
    try {
       
        const user = await User.findById({_id: request.params.id});
        response.status(200).json(user);
    } catch (error) {
        response.status(404).json({message: error.message});
    }

};


export const editUser = async (request,response)=>{
    let user = request.body;
    const editUser = new User(user);
    try {
        await User.updateOne({_id: request.params.id},editUser, { upsert: true });
        response.status(200).json(editUser);
    } catch (error) {
        response.status(404).json({message: error.message});
    }
};

export const deleteUser = async (request, response) => {
    try {
        await User.deleteOne({_id: request.params.id});
        response.status(200).json({message: 'Deleted successfully'});        
    } catch (error) {
        response.status(404).json({message: error.message});
    }    

};

//delete
export const deleteMedicine = async (request, response) => {
    try {
        await Medicine.deleteOne({id: request.params.id});
        response.status(200).json({message: 'Deleted successfully'});        
    } catch (error) {
        response.status(404).json({message: error.message});
    }     
};

export const deleteMedicineCat = async (request, response) => {
    try {
        await Medicine.deleteMany({category: request.params.category});
        response.status(200).json({message: 'Deleted successfully'});        
    } catch (error) {
        response.status(404).json({message: error.message});
    }     
};

export const deleteMedicineQuan = async (request, response) => {
    try {
        await Medicine.deleteMany({quantity: request.params.quantity});
        response.status(200).json({message: 'Deleted successfully'});        
    } catch (error) {
        response.status(404).json({message: error.message});
    }     
};

export const deleteMedicineDate = async (request, response) => {
    try {
        await Medicine.deleteMany({expDate: request.params.date});
        response.status(200).json({message: 'Deleted successfully'});        
    } catch (error) {
        response.status(404).json({message: error.message});
    }     
};