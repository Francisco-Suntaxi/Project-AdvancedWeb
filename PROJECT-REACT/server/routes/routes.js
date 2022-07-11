import express,{Router} from "express";
import {addMedicineIncomplete,addMedicine, addMedicineLot, getAllUsers,getUser,editUser, deleteUser} from "../controller/medicine-controller.js";
import { addUser } from "../controller/user-controller.js";

const router= express.Router();
//Post methods
router.post('/newMedicine',addMedicine);
router.post('/newBatch',addMedicineLot);
router.post('/medicineIncomplete',addMedicineIncomplete);
router.post('/newUser',addUser);


router.get('/all',getAllUsers);
router.get('/:id',getUser);
router.put('/:id',editUser);
router.delete('/:id',deleteUser);

export default router;