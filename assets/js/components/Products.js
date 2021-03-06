import React, { Component } from 'react';
import ProductForm from './ProductForm';
import { Card, CardImg, CardText, CardBody, CardTitle, Container, Alert,Row, Col, Badge  } from 'reactstrap';
import axios from 'axios';
import { APP } from '../../../node_modules/util';

class Products extends Component {

    constructor(props) {
        super(props);
        this.state = {
            products: null,
            isLoading: null
        };
        //this.addProduct = this.addProduct.bind(this);
        //this.favoriteIncrease = this.favoriteIncrease.bind(this);
        this.getProducts = this.getProducts.bind(this);
    }

    favoriteIncrease(data, id) {
        let products = this.state.products;
        let product = products.find(product => product.id === id);
        product.count = data.count;
        this.setState({
            products: products
        })
    }

    componentDidMount() {
        this.getProducts();
    }

    getProducts() {
        if (!this.state.products) {
            this.setState({ isLoading: true });
            console.log(this.state);
            axios.get('test').then(response => {
                this.setState({ products: response.data, isLoading: false });
            }).catch(err => { this.setState({ isLoading: false}); })
        } 
    }

    addProduct(product) {
        this.setState({
            products: [...this.state.products, product]
        })
    }

    render() {
        return (
            <div>
                {this.state.isLoading &&  <Alert color="primary">
                    Loading ....
                </Alert>}
                {this.state.products &&
                <div>
                    <Container>
                        <Row>
                            <Col xs="3">
                                <ProductForm addProduct={this.addProduct} />
                            </Col>
                            <Col xl="9">
                                <Row>
                                    {this.state.products.map(
                                        product =>
                                            <Col xs="4" id={product.id} key={product.id}>
                                                <Card>
                                                    <CardImg top width="100%"
                                                             src={product.image}
                                                             alt="Card image cap" />
                                                    <CardBody>
                                                        <CardTitle>{product.product}</CardTitle>
                                                        <h4><Badge color="info" pill>{product.price}</Badge></h4>
                                                        <CardText>{product.description}</CardText>

                                                        <Favorite favoriteIncrease={this.favoriteIncrease} productId={product.id} favoriteCount={product.favoriteCount}/>
                                                    </CardBody>
                                                </Card>
                                            </Col>
                                    )}
                                </Row>
                            </Col>
                        </Row>
                    </Container>
                </div>
                }
            </div>
        );
    }
}

export default Products;