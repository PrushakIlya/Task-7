import { useSelector } from 'react-redux';
import CurrentlyOnSale from './bloks/CurrentlyOnSale';
import NumbersOfCarsSoldByDate from './bloks/NumbersOfCarsSoldByDate';
import UnsoldCars from './bloks/UnsoldCars';

const Informations = () => {
  const selectorCars = useSelector(state => state.products.cars);

  return (
    <>
      <div className='flex ml-5'>
        <p className='uppercase underline text-lg mr-2'>Average Price Sold for All Time:</p>
        <span className='text-cyan-500'>{selectorCars.averagePriceSoldAllTime} $</span>
      </div>
      <div className='flex ml-5'>
        <p className='uppercase underline text-lg mr-2'>Average Price Sold Today:</p>
        <span className='text-cyan-500'>{selectorCars.averagePriceSoldToday} $</span>
      </div>

      <CurrentlyOnSale />

      <NumbersOfCarsSoldByDate />

      <UnsoldCars />
    </>
  );
};

export default Informations;
