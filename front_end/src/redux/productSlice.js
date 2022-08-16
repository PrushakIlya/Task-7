import { createSlice } from '@reduxjs/toolkit';

const productSlice = createSlice({
  name: 'productSlice',
  initialState: {
    cars: [],
    showrooms: [],
  },
  reducers: {
    addCars: (state, actions) => {
      state.cars = actions.payload;
    },
    addShowrooms: (state, actions) => {
      state.showrooms = actions.payload;
    },
  },
});

export const { addCars, addShowrooms } = productSlice.actions;
export default productSlice.reducer;
