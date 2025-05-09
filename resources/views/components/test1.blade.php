<button 
                    type="submit"
                    class="bg-primary30 text-gray30 text-p font-bold px-5 h-[45px] rounded-lg hover:bg-primary50"
                >
                    Telusuri
                </button>

                <button 
                    type="reset"
                    @click="showResult = false; selectedKategori = 'Pilih Kategori'; selectedTagar = 'Pilih Tagar'; sortBy = 'desc'"
                    class="bg-secondary70 text-gray30 text-p font-bold px-5 h-[45px] rounded-lg hover:bg-secondary50"
                >
                    Reset
                </button>