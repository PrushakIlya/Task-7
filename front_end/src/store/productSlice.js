import { createSlice } from '@reduxjs/toolkit';
import { BRAND_FRIDGE, BRAND_LAPTOP, BRAND_TVSET, BRAND_MOBILE } from '../vars/vars';

const productSlice = createSlice({
  name: 'productSlice',
  initialState: {
    products: [],
    list: {},
  },
  reducers: {
    getBrand(state, action) {
      switch (action.payload) {
        case 'tv-set':
          state.products = BRAND_TVSET;
          break;
        case 'fridge':
          state.products = BRAND_FRIDGE;
          break;
        case 'laptop':
          state.products = BRAND_LAPTOP;
          break;
        case 'mobile phone':
          state.products = BRAND_MOBILE;
          break;
      }
    },
    getBill(state, action) {
      state.list = action.payload;
    },
  },
});

export const { getBrand, getBill } = productSlice.actions;
export default productSlice.reducer;
