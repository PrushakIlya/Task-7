const FormComponent = props => {
  const {name, type, error, state, blockError} = props;
  return (
    <div>
      <label htmlFor={ name }>{name}</label>
      <input type={ type } name={ name } onChange={e=>state(e.target.value)}/>
      <div className={ error }>{blockError}</div>
    </div>
  );
};

export default FormComponent;
