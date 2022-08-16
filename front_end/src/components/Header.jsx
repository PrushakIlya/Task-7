const Header = () => {
  return (
    <section className='header'>
      <div className='wrapper'>
        <nav className='navigate'>
          <a href='/' className="navigate__logo">Sold|Vehicle</a>
          <div className='auntification'>
            <a href='http://localhost:8888/admin' className="auntification__registration">ADMIN</a>
            <a href='/autorization' className="auntification__login">Login</a>
          </div>
        </nav>
      </div>
    </section>
  );
};

export default Header;
