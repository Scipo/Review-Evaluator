from sqlalchemy import create_engine
import pandas as pd

connection_string = 'postgres://%s:%s@%s/%s' % (
    'user',
    'pass',
    'host',
    'db_name',
)

class ReadSQL(object):
    def __init__(self, connection_string):
        self._connection_string = connection_string
        self._create_engine()
        self._data_frame = None

    def load_data(self, query, index_column=None):
        try:
            conn = self._engine.connect()
            conn.begin()
            self._data_frame = pd.read_sql(query, conn, index_column)
            conn.close()
        except Exception as e:
            raise e

    def execute_query(self, query):
        try:
            conn = self._engine.connect()
            conn.execute(query)
            conn.close()
        except Exception as e:
            raise e

    def get_engine(self):
        return self._engine

    def get_data_frame(self):
        return self._data_frame

    def _create_engine(self):
        try:
            self._engine = create_engine(self._connection_string)
        except Exception as e:
            raise e
