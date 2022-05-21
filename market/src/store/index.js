import {createStore} from 'vuex'
import axiosClient from '../axios'
import { v4 as uuidv4 } from 'uuid';

const cartItem = [
    {
        id:uuidv4(),
        title: 'Cheap Wholesale top quality second hand shoe',
        thumbnail: 'clothpieces.jpg',
        images: [
            {image: 'image here'}
        ],
        price: 34589.00,
        mainPrice: 248573,
        details: '20 Pieces (Min. Order)',
        description: 'This is the description',
        new: true,
    },
    {
        id:uuidv4(),
        title: 'Cheap Wholesale top quality second hand shoe',
        thumbnail: 'cookware.jpg',
        images: [
            {image: 'image here'}
        ],
        price: 445.00,
        mainPrice: 608573,
        details: '15 Pieces (Min. Order)',
        description: 'This is the description',
        new: false,
    },
    {
        id:uuidv4(),
        title: 'Cheap Wholesale top quality second hand shoe',
        thumbnail: 'fashioncloth.jpg',
        images: [
            {image: 'image here'}
        ],
        price: 2345.00,
        mainPrice: 48573,
        details: '8 Pieces (Max. Order)',
        description: 'This is the description',
        new: false,
    },
    {
        id:uuidv4(),
        title: 'Cheap Wholesale top quality second hand shoe',
        thumbnail: 'girlsskirt.jpg',
        images: [
            {image: 'image here'}
        ],
        price: 1345.00,
        mainPrice: 9803,
        details: '20 Pieces (Min. Order)',
        description: 'This is the description',
        new: true,
    },
    {
        id:uuidv4(),
        title: 'Cheap Wholesale top quality second hand shoe',
        thumbnail: 'heartshape.jpg',
        images: [
            {image: 'image here'}
        ],
        price: 4345.00,
        mainPrice: 448573,
        details: '1000 Kilograms (Min.',
        description: 'This is the description',
        new: true,
    },
    {
        id:uuidv4(),
        title: 'Cheap Wholesale top quality second hand shoe',
        thumbnail: 'hotpot.jpg',
        images: [
            {image: 'image here'}
        ],
        price: 45.00,
        mainPrice: 48573,
        details: '1 Piece (Min. Order)',
        description: 'This is the description',
        new: false,
    },
    {
        id:uuidv4(),
        title: 'Cheap Wholesale top quality second hand shoe',
        thumbnail: 'machine.jpg',
        images: [
            {image: 'image here'}
        ],
        price: 1345.00,
        mainPrice: 8573,
        details: '10000.0 Kilograms (Min.',
        description: 'This is the description',
        new: false,
    },
    {
        id:uuidv4(),
        title: 'Cheap Wholesale top quality second hand shoe',
        thumbnail: 'mixedcloth.jpg',
        images: [
            {image: 'image here'}
        ],
        price: 1345.00,
        mainPrice: 8573,
        details: '10000.0 Kilograms (Min.',
        description: 'This is the description',
        new: true,
    },
    {
        id:uuidv4(),
        title: 'Cheap Wholesale top quality second hand shoe',
        thumbnail: 'shoe.jpg',
        images: [
            {image: 'image here'}
        ],
        price: 1345.00,
        mainPrice: 8573,
        details: '10000.0 Kilograms (Min.',
        description: 'This is the description',
        new: false,
    },
    {
        id:uuidv4(),
        title: 'Cheap Wholesale top quality second hand shoe',
        thumbnail: 'spoon.jpg',
        images: [
            {image: 'image here'}
        ],
        price: 1345.00,
        mainPrice: 8573,
        details: '10000.0 Kilograms (Min.',
        description: 'This is the description',
        new: true,
    },
    {
        id:uuidv4(),
        title: 'Cheap Wholesale top quality second hand shoe',
        thumbnail: 'trouser.jpg',
        images: [
            {image: 'image here'}
        ],
        price: 1345.00,
        mainPrice: 8573,
        details: '10000.0 Kilograms (Min.',
        description: 'This is the description',
        new: false,
    },
    {
        id:uuidv4(),
        title: 'Cheap Wholesale top quality second hand shoe',
        thumbnail: 'clothpieces.jpg',
        images: [
            {image: 'image here'}
        ],
        price: 1345.00,
        mainPrice: 8573,
        details: '10000.0 Kilograms (Min.',
        description: 'This is the description',
        new: true,
    },
];
const store = createStore({
    state: {
        user: {
            data: null,
            token: localStorage.getItem("TOKEN"),
            type: null,
        },
        cartData: [...cartItem],
    },
    getters: {},
    actions: {},
    mutations: {},
    modules: {},
});

export default store;