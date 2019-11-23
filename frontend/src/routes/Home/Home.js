import React, { Fragment, Component } from 'react';
import Item from '../../Components/Movie/Item';

import { allMovies } from '../../Services/Api/Movie';


class Home extends Component {
    componentWillMount() {
        this.getMovies();
    }

    getMovies = () => {
        //this.props.dispatch(loading());
        allMovies()
            .then(res => {
                console.log('Resposne geldi', res);
                /*this.props.dispatch(success());
                this.setState({
                  invoices: res.data.data,
                });*/
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
                <Item></Item>
            </Fragment>
        )
    }
}

export default Home;