import axios from "axios";

export default class DataService {
  constructor() {
  };

  get(url, callback) {
    axios.get(url)
    .then(function (response) {
      // handle success
      callback(response.data);
    })
    .catch(function (error) {
      // handle error
      console.log(error);
    })
    .finally(function () {
      // always executed
    })
  }
};