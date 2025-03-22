import { defineStore } from 'pinia'
import { ref } from 'vue'
import axios from 'axios';


export const useCurrencyStore = defineStore('currency', () => {
    const currency = ref('inr');
    const toggleCurrency = () => {
        if (currency.value == 'inr') {
            currency.value = 'usd'
        } else if (currency.value == 'usd') {
            currency.value = 'inr'
        }
    }

    const exchangeRate = ref(null)

    const fetchCurrencyExchange = async () => {
        try {
            const response = await axios.get('/currency-exchange')
            exchangeRate.value = response.data.rate;
        } catch (err) {
            console.log(err)
        }
    }

    const convertCurrency = (amount) => {
        let convertedAmount = currency.value === 'usd' ? amount / exchangeRate.value : amount;


        convertedAmount = convertedAmount % 1 === 0
            ? convertedAmount.toFixed(0)
            : convertedAmount.toFixed(2);

        return currency.value === 'usd' ? `$${convertedAmount}` : `₹${convertedAmount}`;
    };

    return { currency, toggleCurrency, exchangeRate, fetchCurrencyExchange, convertCurrency }


})