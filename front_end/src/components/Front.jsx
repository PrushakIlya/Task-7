import { apiGet } from './../api/api';
import { useSelector, useDispatch } from 'react-redux';
import { addCars, addShowrooms } from './../redux/productSlice';
import { useEffect } from 'react';
import { API_SHOWROOM, API_VEHICLE } from './../api/api-type';
import ShowroomList from './ShowroomList';
import Informations from './Informations';

const Front = () => {
  const selectorCars = useSelector(state => state.products.cars);
  const selectorShowrooms = useSelector(state => state.products.showrooms);
  const dispatch = useDispatch();

  useEffect(() => {
    apiGet(API_SHOWROOM, dispatch, addShowrooms);
    apiGet(API_VEHICLE, dispatch, addCars);
  }, []);

  return (
    <>
      <ShowroomList />
      <Informations />
    </>
  );
};

export default Front;
