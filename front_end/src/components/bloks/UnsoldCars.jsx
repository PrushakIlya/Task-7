import { useSelector } from 'react-redux';
const UnsoldCars = () => {
  const selectorCars = useSelector(state => state.products.cars);
  let id = 1;
  let showroomCar;
  return (
    <div className='border-4 m-5 p-5 w-auto border-black'>
      <div className='uppercase underline text-lg'>Currently on sale</div>
      <table>
        <thead>
          <tr>
            <th className='w-20'>id</th>
            <th className='w-30'>Where buy</th>
            <th className='w-40'>model</th>
            <th className='w-20'>color</th>
            <th className='w-20'>yearOfProduction</th>
            <th className='w-20'>price</th>
          </tr>
        </thead>
        <tbody>
          {selectorCars.unsoldCars &&
            selectorCars.unsoldCars.map(value => {
              if (value.showroomId) {
                showroomCar = value.showroomId.name;
              } else {
                showroomCar = 'soon';
              }

              return (
                <>
                  <tr>
                    <td className='text-center text-cyan-500'>{id++}</td>
                    <td className='text-center text-cyan-500'>{showroomCar}</td>
                    <td className='text-center text-cyan-500'>{value.model}</td>
                    <td className='text-center text-cyan-500'>{value.color}</td>
                    <td className='text-center text-cyan-500'>{value.yearOfProduction}</td>
                    <td className='text-center text-cyan-500'>{value.price}</td>
                  </tr>
                </>
              );
            })}
        </tbody>
      </table>
    </div>
  );
};

export default UnsoldCars;
