export default function (to, from, savedPosition) {
  if (to.hash) {
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        resolve({
          selector: to.hash,
        })
      }, 500)
    })
  }
}
