import React, { Component, Fragment } from 'react';
import { Link } from "react-router-dom";

class Header extends Component {
  render() {
    return (
      <Fragment>
        <nav className="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <a className="navbar-brand" href='/'>Sinemania</a>
          <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span className="navbar-toggler-icon"></span>
          </button>

          <div className="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul className="navbar-nav mr-auto">
              <li className="nav-item active">
                <Link className="nav-link" to='/'>Home</Link>
              </li>
              <li className="nav-item active">
                <Link ref='randomMovieLink' to={'#'} className="nav-link" onClick={(e) => {
                  e.preventDefault();
                  let movieArr = JSON.parse(localStorage.getItem('movies'));
                  let movie = movieArr[Math.floor(Math.random() * movieArr.length)];
                  localStorage.setItem('randomMovie', movie.id);
                  //this.props.history.push('/movies/' + movie.id);
                  window.location.href = '/movies/' + movie.id;
                }}>Random Movie</Link>
              </li>
            </ul>
          </div>
        </nav>
      </Fragment>
    );
  }
}

export default Header;