import { useSelector } from 'react-redux';
const NumbersOfCarsSoldByDate = () => {
  const selectorCars = useSelector(state => state.products.cars);
  let id = 1;
  return (
    <div className='border-4 m-5 p-5 w-auto border-black'>
      <div className='uppercase underline text-lg'>Numbers of cars sold by date</div>
      <table>
        <thead>
          <tr>
            <th className='w-20'>id</th>
            <th className='w-40'>dateOfSold</th>
            <th className='w-40'>count</th>
          </tr>
        </thead>
        <tbody>
          {selectorCars.numbersOfCarsSoldByDate &&
            selectorCars.numbersOfCarsSoldByDate.map(value => {
              return (
                <>
                  <tr>
                    <td className='text-center text-cyan-500'>{id++}</td>
                    <td className='text-center text-cyan-500'>{value.dateOfSold}</td>
                    <td className='text-center text-cyan-500'>{value.count}</td>
                  </tr>
                </>
              );
            })}
        </tbody>
      </table>
    </div>
  );
};

export default NumbersOfCarsSoldByDate;
