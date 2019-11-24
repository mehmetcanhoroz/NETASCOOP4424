import React, { Fragment, Component } from 'react';
import Item from '../../Components/Movie/Item';

import { allMovies } from '../../Services/Api/Movie';

class Home extends Component {
    constructor(props) {
        super(props);

        this.state = {
            movies: []
        }
    }
    componentWillMount() {
        this.getMovies();
    }

    getMovies = () => {
        //this.props.dispatch(loading());
        allMovies()
            .then(res => {
                localStorage.setItem('movies', JSON.stringify(res.data));
                localStorage.setItem('randomMovie', res.data[0].id);
                let movie = res.data[Math.floor(Math.random() * res.data.length)];
                localStorage.setItem('randomMovie', movie.id);

                this.setState({
                    movies: res.data,
                });

                /*this.props.dispatch(success());
                ;*/
            })
            .catch(err => {
                /*const error = {
                  title: 'Connection Error',
                  message:
                    'We apologise but we have had an issue on our end. Please try again in a few moments.',
                };*/
                //this.props.dispatch(fail(error));
            });
    };
    render() {
        return (
            <Fragment>
                <h2>Home Page</h2>
                <div className="row">
                    {this.state.movies && this.state.movies.map((item, key) =>
                        <Item movie={item} key={item.id} />
                    )}
                </div>
            </Fragment>
        )
    }
}

export default Home;